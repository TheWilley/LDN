def create_connection(db_file):
    conn = None
    try:
        conn = sqlite3.connect(db_file)
    except Error as e:
        print(e)

    return conn

def index(conn):
    cur = conn.cursor()
    cur.execute("SELECT * FROM article")

    rows = cur.fetchall()

    for row in rows:
        print(row)

def content(conn):
    cur = conn.cursor()
    cur.execute("SELECT * FROM article where id='{id}'")

    rows = cur.fetchall()

    for row in rows:
        print(row)

def main():
    database = ""

    # create a database connection
    conn = create_connection(database)
    with conn:
        print("2. Query all tasks")
        index(conn)
        content(conn)