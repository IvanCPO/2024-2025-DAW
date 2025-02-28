import json



def readLibr (library, tabs=""):
    for key, value in library.items():
        if type(value)==type(dict()):
            print(f"{tabs}{key} -->")
            readLibr(value)
        elif type(value)==type(list()):
            print(f"{tabs}{key} --> [")
            for elem in value:
                readLibr(elem,tabs+"\t")
            print(f"{tabs}{key} --> ]")
            
        else:
            print(f"{tabs}{key} --> {value}")
            
def readTitles(library):
    print("###########TITLES BOOK###########")
    for book in library["catalog"]["book"]:
        print("-> "+str(book["title"]))
        
        
def findValue(library, id):
    print("###########FIND BY ID###########")
    exist = False
    for book in library["catalog"]["book"]:
        if id==book["id"]:
            exist = True
            readLibr(book)
    if exist==False:
        print(f"No se ha podido encontrar el id = {id}")


with open("catalog.json", "r") as file:
    catalogo = json.load(file)
    readLibr(catalogo)
    readTitles(catalogo)
    findValue(catalogo,5)
