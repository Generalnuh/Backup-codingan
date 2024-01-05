import numpy as np

a = np.empty(10, dtype=int)

for i in range(10):
    user_input = input(f'Masukkan elemen {i + 1}: ')
    a[i] = int(user_input)

max_value, macx_index = np.max(a), np.argmax(a)
min_value, min_index = np.min(a), np.argmin(a)

print('Array: ', a)
print(f'Nilai Maksimum: {max_value}, Posisi: {min_index}')
print(f'Nilai minimum: {min_value}, Posisi: {min_index}')