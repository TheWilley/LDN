import sqlite3

# Select file
dbfile = 'articles.db'

# Create a connection to file
conn = sqlite3.connect('articles.db')

# Create cursor
c = conn.cursor()

# Drop the table
c.execute("""DROP TABLE article""")

# Ccreate the table
c.execute("""CREATE TABLE IF NOT EXISTS article (
    id INTEGER PRIMARY KEY,
	link TEXT,
	image TEXT,
	title TEXT NOT NULL,
	date TEXT NOT NULL,
	content TEXT
);""")

# The content is parsed as ann array and thus emits unuseful data. It needs to be parsed properly and also support
# the UTF-8 standard as swedish signs are now ignored and rendered as gibberish

# Function to generate
def insertToDatebase(link, image, title, date, content):
    c.execute("INSERT INTO article (link, image, title, date, content) VALUES (?, ?, ?, ?, ?);", (link, image, title, date, content))
    print("DONE")
    conn.commit()

def closedb():
    conn.close()




