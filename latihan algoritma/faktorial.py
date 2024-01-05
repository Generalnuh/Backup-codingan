def factorial(n):
    if n == 0 or n == 1:
        return 1
    else:
        return n * factorial(n-1)

tambah = 1+ factorial(100)
print(tambah)