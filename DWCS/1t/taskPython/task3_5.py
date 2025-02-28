# FUNCTION tripla

def tripleCheck(list):
    value = ""
    repit = 0
    for v in list:
        
        if v==value:
            repit+=1
        else:
            value = v
            repit = 1
        
        if repit==3:
            break
    return repit==3

numbers = [ 1, 1, 1, 2, 2, 2, 1]
print (tripleCheck(numbers))


# FUNCTION countries
ceu = {
        "Italy":"Rome",
       "Luxembourg":"Luxembourg",
       "Belgium": "Brussels",
       "Denmark":"Copenhagen", 
       "Finland":"Helsinki", 
       "France" : "Paris",
       "Slovakia" : "Bratislava", 
       "Slovenia" : "Ljubljana",
       "Germany" : "Berlin",
       "Greece" : "Athens", 
       "Ireland":"Dublin",
       "Netherlands":"Amsterdam",
       "Portugal":"Lisbon",
       "Spain":"Madrid", 
       "Sweden":"Stockholm",
       "United Kingdom":"London",
       "Cyprus":"Nicosia",
       "Lithuania":"Vilnius", 
       "Czech Republic":"Prague",
       "Estonia":"Tallin",
       "Hungary":"Budapest",
       "Latvia":"Riga",
       "Malta":"Valetta", 
       "Austria" : "Vienna", 
       "Poland":"Warsaw"
    }

def searchCapital(countries, country):
    for pais in countries:
        if pais==country:
            print(f"The capital of {pais} is {countries[pais]}")
            break

searchCapital(ceu,"Spain")