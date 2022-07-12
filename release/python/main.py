# First, install requiered packages
import os
subprocess.check_call([sys.executable, "-m", "pip", "install", "-r", "requirements.txt"])

# Start of sccript
from sqllite import insertToDatebase, closedb
import time
import requests
from bs4 import BeautifulSoup

# The target URL
URL = "https://www.lidkopingsnytt.nu"

def getContent(thisurl):
    tag_p = None
    tag_li = None
    joind = []

    # Make a request
    r = requests.get(thisurl)

    # Instannnce the soup library
    soup = BeautifulSoup(r.content, "html.parser")

    # Find all links
    links = soup.findAll("div", id="artikel")

    for e in links:
        # Get all 'p' tags
        tag_p = e.find_all("p")
        tag_li = e.find_all("li")

    try:
        for e in tag_p, tag_li:
            point = ' '.join([str(elem) for elem in e]);
            joind.append(point)

    except(TypeError):
        pass

    values = ''.join(map(str, joind))
    return values


def sccrape(thisurl):
    # Make a request
    r = requests.get(thisurl)

    # Instannnce the soup library
    soup = BeautifulSoup(r.content, "html.parser")

    # Find all links
    links = soup.findAll("div", class_="Framsidan")

    # For every article found
    for e in links:
        # Temporary variables
        temp_link = None
        temp_image = None
        temp_title = None
        temp_date = None

        # Get all 'a' tags
        tag_a = e.find_all("a")

        # Get link
        for l1 in tag_a:
            # Get the 'href' attribute
            temp_link = l1["href"]

            # The comment threads does not contain a title in their 'a' elements, so they are ignored
            try:
                l1["title"]
            except KeyError:
                pass
            else:
                temp_title = l1["title"]
            
            break

        # Get image
        tag_p = e.find_all("p")
        for l1 in tag_p:
            tag_img = l1.find_all("img")

            for l3 in tag_img:
                temp_image = l3["src"]

        # Get date
        tag_small = e.find_all("small")
        for l1 in tag_small:
            temp_date = l1.contents

        temp_content = getContent(temp_link)

        # Append object to ann array for later usage
        insertToDatebase(temp_link, temp_image, temp_title, ''.join(temp_date), temp_content)


def start():
    # Start a timer
    start = time.time()

    # Parse x articcles
    for i in range(4):
        if i == 0:
            pass
        else:
            tempurl = URL + "/page/" + str(i)
            sccrape(tempurl)

    # End the timer
    end = time.time()

    # Close the databse
    closedb()

    # End of program
    print((end - start) / 60 + "min")
    print("END OF THE PROGRAM!!!")


start()
