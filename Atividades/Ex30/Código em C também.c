#include<stdio.h>
int main()
{
int segundos=0;
float massaini, massafim;
printf("Informe a massa inicial:");
scanf("%f", &massaini);
massafim=massaini;
while (massafim>=0.10)
{
massafim=massafim/0.25;
segundos=segundos+30;
}
int h= segundos/3600;
int m=(segundos%3600)/60;
int s=(segundos%3600)%60;
printf("tempo:%hi%mi%si,h,m,s");
return 0;
}
