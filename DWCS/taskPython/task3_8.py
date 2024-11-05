class Alien:
    numberOfAliens = 0
    def __init__(self, name):
        self.name = name
        Alien.numberOfAliens+=1
        
    
    def getNumberOfAliens(self):
        return Alien.numberOfAliens
    

a1 = Alien("Jose")
a2 = Alien("Robert")
a3 = Alien("Micke Mouse")

print("Actualmente hay "+str(a1.getNumberOfAliens()))
print("Actualmente hay "+str(a2.getNumberOfAliens()))
print("Actualmente hay "+str(a3.getNumberOfAliens()))