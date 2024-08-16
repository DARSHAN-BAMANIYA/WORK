from tkinter import *
window = Tk()
window.title('DARSHAN ')
window.geometry('650x280')
Label(window, text='First Name').grid(row=4,column=3)
Label(window, text='Last Name').grid(row=5,column=3)
Label(window, text='Email').grid(row=6,column=3)
Label(window, text='Password').grid(row=7,column=3)

e1 = Entry(window)
e2 = Entry(window)
e1.grid(row=4, column=4)
e2.grid(row=5, column=4)

e3 = Entry(window)
e4 = Entry(window)
e3.grid(row=6, column=4)
e4.grid(row=7, column=4)

def clicked():
    import mysql.connector
    con = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="python"
    )
    cur=con.cursor()
    hell= "INSERT INTO signup (firstname,lastname,email,password) VALUES (%s,%s,%s,%s)"
    dell=(e1.get(),e2.get(),e3.get(),e4.get())
    cur.execute(hell,dell)
    con.commit()
    res="YOUR data suceesfully store "
    show.config(text=res)


btn=Button(window,text="sumit",command=clicked)
btn.grid(row=8,column=3)
show=Label()
show.grid(column=8,row=4)
window.mainloop()

