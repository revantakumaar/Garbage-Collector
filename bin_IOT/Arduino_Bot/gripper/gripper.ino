
#include <Servo.h>
void grip(void);void moveup(void);
void movedown(void);
void gripper();
Servo myservo1;
Servo myservo2;
int pos = 0;    
void setup() {
  myservo1.attach(10); 
  myservo2.attach(9);
  gripper();
}

void loop()
{

}
void gripper()
{
  ungrip();
  delay(1000);
  movedown();
  delay(1000);
  grip();
  delay(1000);
  moveup();
  delay(2000); 
  movedown();
  delay(1000);
  ungrip();
  delay(1000);
  moveup();
  delay(1000);
}
void ungrip()
{
  for (pos = 180; pos >= 10; pos -= 1)
  { 
    myservo2.write(pos);                    
  }
  
}
void grip()
{
  for (pos = 0; pos <= 180; pos += 1)
  { 
    myservo2.write(pos);
    delay(20);
    }
}
void movedown()
{
  for (pos = 0; pos <= 130; pos += 1) 
  { 
    myservo1.write(pos); 
    delay(10);
     }
    
}
void moveup()
{                                
  for (pos = 180; pos >= 0; pos -= 1)
  { 
    myservo1.write(pos);              
}
}
  







