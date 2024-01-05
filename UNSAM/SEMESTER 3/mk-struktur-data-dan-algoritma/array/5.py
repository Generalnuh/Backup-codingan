import numpy as np

def tukar_diagonal(matrix):
    if matrix.shape != (4, 4):
        raise ValueError('Matrix input harus berukuran 4x4')
    
    matriks_hasil = matrix.copy()

    triu_indices = np.triu_indices(4, k=1)
    tril_indices = np.tril_indices(4, k=-1)

    matriks_hasil[triu_indices] = matrix[tril_indices]
    matriks_hasil[tril_indices] = matrix[triu_indices]
    
    return matriks_hasil

matriks_input = np.array([[1,2,3,4],
                          [5,6,7,8],
                          [9,10,11,12],
                          [13,14,15,16]])

print('Matriks Awal:')
print(matriks_input)

matrks_hasil = tukar_diagonal(matriks_input)
print('\nMatriks Setelah Ditukar: ')
print(matrks_hasil)
