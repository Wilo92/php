punto = {"x": 25, "y": 50}
print(punto["x"])
print(punto["y"])

punto["z"] = 45
# print(punto, punto["lalala"])
if "lalala" in punto:
    print("", punto["lalala"])

print(punto.get("lalala", 97))
del punto["x"]
del (punto["y"])
print(punto)
punto["x"] = 25

for valor in punto:
    print(valor, punto[valor])

for valor in punto.items():
    print(valor)

for llave, valor in punto.items():
    print(llave, valor)

usuarios = [
    {"id": 1, "nombre": "chanchito"},
    {"id": 2, "nombre": "marrano"},
    {"id": 3, "nombre": "hormiga"},
    {"id": 4, "nombre": "hormiga"},
]

for usuarios in usuarios:
    print(usuarios["nombre"])
