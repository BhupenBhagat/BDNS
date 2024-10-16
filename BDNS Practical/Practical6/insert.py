from pymongo import MongoClient
client=MongoClient('localhost',27017)
db=client.abc
def insert():
    try:
        name1=input("Enter the name:")
        age1=int(input("Enter the age:"))
        dept1=input("Enter the Department:")
        pin1=int(input("Enter the PinNo:"))
        db.MyCol.insert_one({
              "name":name1,
              "age":age1,
              "dept":dept1,
              "pin":pin1
        })
        print("Inserted data successfully")
    except Exception:
        print(str(e))

insert()
