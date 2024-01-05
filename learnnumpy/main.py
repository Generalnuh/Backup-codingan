import numpy as N

# Membuat Vector
a = N.array([1,2,3,4,5])
# Membuat Vector dengan range
b = N.arange(1,10,2)
# Membuat linspace
c = N.linspace(1,10,4)
# Array Multidimesi / Matriks
d = N.array([ (1,2,3), (4,5,6) ])
# Matriks Dengan nilai nol
e = N.zeros((5,5))
# Matriks dengan nilai satu
f = N.ones((5,5))
# Matriks identitas
g = N.identity(5)
# atau
g2 = N.eye(5)
# Display
print(a)
print(b)
print(c)
print(d + 2)
print(e)
print(f)
print(g)
print(g2)