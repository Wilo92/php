# set es grupo o conjunto
primer = {1, 1, 2, 2, 3, 4}
print(primer)
primer.add(5)
primer.remove(1)
print(primer)

segundo = [3, 4, 5]
segundo = set(segundo)
print(segundo)
print(primer & segundo)  # interseccion del conjunto
print(primer-segundo)  # diferencias
print(primer ^ segundo)  # diferencia simetrica

if 5 in segundo:
    print("holas")
