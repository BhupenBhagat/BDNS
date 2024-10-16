#Delete
from pymongo import MongoClient
client=MongoClient('localhost',27017)
db=client.abc

def delete():
    try:
        name1=input("Enter the name:")
        db.MyCol.delete_one({"name" : name1})
        print("\n Data deleted successfully")
    except Exception:
        print(str(e))

delete()
