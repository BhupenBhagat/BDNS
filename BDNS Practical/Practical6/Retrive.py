#Retrive
from pymongo import MongoClient
client=MongoClient('localhost',27017)
db=client.abc
def read():
    try:
        Col=db.MyCol.find()
        print("\n All Data from databse TYIT249613:")
        for MyCol in Col:
            print(MyCol)
    except:
        print(str(e))

read()
