import numpy as N

b = N.empty(10, dtype=int)
for i in range(10):
    b[i] = int(input(f'Masukkan elemen {i + 1}: '))

reversed_b = b[::-1]
print('Array Asli: ', b)
print('Array yang telah dibalik: ', reversed_b)