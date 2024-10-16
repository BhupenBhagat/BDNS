#update
from pymongo import MongoClient
client=MongoClient('localhost',27017)
db=client.abc
def update():
    try:
        name1=input("Enter the name:")
        age1=int(input("Enter the age to update:"))
        db.MyCol.update_one({"name":name1},{"$set":{"age":age1}})
        print("\n Records updated successfully\n")
    except:
        print(str(e))

update()
