import turtle
# Create screen and turtle object
screen = turtle.Screen()
screen.title("Turtle Keypress and Keyrelease Demo")
t = turtle.Turtle()
t.speed(2)  # Set turtle speed
# Functions for movement
def move_forward():
    t.forward(20)
def move_backward():
    t.backward(20)
def rotate_left():
    t.left(15)
def rotate_right():
    t.right(15)
# Function to handle key release
def key_released():
    print("Key Released!")
# Bind key events
screen.listen()
screen.onkeypress(move_forward, "Up")
screen.onkeypress(move_backward, "Down")
screen.onkeypress(rotate_left, "Left")
screen.onkeypress(rotate_right, "Right")
# Bind key release event
screen.onkeyrelease(key_released, "Up")
screen.onkeyrelease(key_released, "Down")
screen.onkeyrelease(key_released, "Left")
screen.onkeyrelease(key_released, "Right")
# Keep the window open
screen.mainloop()
