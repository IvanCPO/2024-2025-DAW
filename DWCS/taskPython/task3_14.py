products = {
    0: "potatoes",
    1: "tomatoes",
    3: "onions",
    4: "garlic"
}


def showDictionary(dictionary):
    for value in dictionary.values():
        print(value)


def findValue(dictionary, key):
    value = dictionary.get(key)
    if value:
        print(f"Encontrado value = {value}")
    else:
        print(f"No encontrado llave = {key}")


def mergeDictionary(dict1, dict2):
    merged_dict = dict1.copy()
    merged_dict.update(dict2)
    return merged_dict

showDictionary(products)

products.update({2:"pepinillo", 5:"pipo"})

findValue(products,2)

print (mergeDictionary(products, {6:"zanahoria"}))