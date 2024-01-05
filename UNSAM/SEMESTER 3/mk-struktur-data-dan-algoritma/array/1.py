import numpy as N

a = N.arange(8)
condition = N.logical_and(a > 3, a < 6)
answer = N.where(condition, a * 2, 0)

print(a)
print(condition)
print(answer)