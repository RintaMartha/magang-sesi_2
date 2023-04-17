#define buzzer 7

void setup() {
  // put your setup code here, to run once:
pinMode(buzzer, OUTPUT);
}

void loop() {
  // put your main code here, to run repeatedly:
tone(buzzer, 10000,500);
delay(1000);
noTone(buzzer);
delay(1000);
}
