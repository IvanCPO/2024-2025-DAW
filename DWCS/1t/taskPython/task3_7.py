# FUNCTION Person

class Person:
    def __init__(self, id : int , name : str, age: int):
        self.id = id
        self.name = name
        self.age = age
        
    def __str__(self):
        return f"[{self.name} ({self.age})] "




class Student:
    def __init__(self, id : int , person: Person , degree : str):
        self.idStudent = id
        self.person = person
        self.degree = degree
    
    def __str__(self):
        return f"Student [{self.idStudent}]: - Person: {self.person} || degree: {self.degree}"



        
class StudentGroup:
    def __init__(self, id : int , name : str , students : list):
        self.id_student = id
        self.groupName = name
        self.students = students

student1 = Student(0,Person(0,"Iván",20),"2DAW")
student2 = Student(1,Person(1,"Diana",22),"2DAW")
student3 = Student(2,Person(2,"Ángel",22),"2DAW")

print (student1)
print (student2)
print (student3)