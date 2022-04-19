#!/usr/bin/env python
# coding: utf-8

# # Ticket Reservation System

# In[2]:


import pandas as pd
print( "==========================================================================")
print("========================================================================")
print("========================Ticket Reservation System=======================")
print("========================================================================")
print("========================================================================")

number = int(input("Enter number of vistors :"))
# creating an empty list for name , age , ticket class
name = []
age = []
classes = []
price = []
for i in range(0, number):
    n = input("Enter the Name of vistor "+str(i+1)+" : ")
    name.append(n)  # adding the element
    a = input("Enter the Age of vistor "+str(i+1)+" : ")
    age.append(a)  # adding the element
    c = input("Enter the classes of vistor "+str(i+1)+" : ")
    classes.append(c)  # adding the element
    if(c == 'A'):
        price.append(1500.00)
    elif(c == 'B'):
        price.append(1200.00)
    elif(c == 'C'):
        price.append(800.00)

    Sum = sum(price)
    space = ' '
print("========================================================================")
print("========================================================================")
print("===========================Vistor Report================================")
print("========================================================================")
print("========================================================================")
Vistor_data = {'Vistor Name': name,
             'Vistor Age': age,
             "Vistor class": classes,
             'Price': price}
df = pd.DataFrame(Vistor_data)
print(df)

print("Total Price of All Tickets  :"+ str(Sum))
print("Thank you for using Our Ticket Reservation System")


# In[ ]:




