#include<stdio.h>

int main()
{
char n[50];
int age;
int p;
char add[50];

char na[50];
int ag;
int ph;
char addr[50];

printf("Boities Phone list\n\n");
printf("Menu\n");
printf("Press 1 to add\n\n");

int x;
printf("Enter\n");
scanf("%d",1 &x);

if(x==1)
{
int y;

printf("Enter 10 digit number  >");
scanf("%d", &y);

if(y==1)
{
printf("\t\t___________________________\n");
printf("Name >> ");
scanf("%s", &n);
printf("\t\t___________________________\n");
printf("Age >> ");
scanf("%d", &age);
printf("\t\t___________________________\n");
printf("Number >> ");
scanf("%d", &p);
printf("\t\t___________________________\n");
printf("EMail >>");
scanf("%s", &add);
printf("__+++___+++___+++___+++___+++");
}
else if(y==2)
{
printf("\t\t___________________________\n");
printf("Name >> ");
scanf("%s", &n);
printf("\t\t___________________________\n");
printf("Age >> ");
scanf("%d", &age);
printf("\t\t___________________________\n");
printf("Number >> ");
scanf("%d", &p);
printf("\t\t___________________________\n");
printf("EMail >>");
scanf("%s", &add);
printf("__+++___+++___+++___+++___+++");

printf("\t\t___________________________\n");
printf("Name >> ");
scanf("%s", &na);
printf("\t\t___________________________\n");
printf("Age >> ");
scanf("%d", &ag);
printf("\t\t___________________________\n");
printf("Number >> ");
scanf("%d", &ph);
printf("\t\t___________________________\n");
printf("EMail >>");
scanf("%s", &addr);
printf("__+++___+++___+++___+++___+++");
}

printf("Press 2 to see contact list");
printf("Press 3 to exit app");

int z;

printf("Enter\n");
scanf("%d", &z);

if (z==2)
{
int num;
printf("Enter number to view");
scanf("%d", &num);

if(num==1)
{
printf("\t\t___________________________\n");
printf("Name >> ");
printf("%s", n);
printf("\t\t___________________________\n");
printf("Age >> ");
printf("%d", age);
printf("\t\t___________________________\n");
printf("Number >> ");
printf("%d", p);
printf("\t\t___________________________\n");
printf("EMail >>");
printf("%s", add);
printf("__+++___+++___+++___+++___+++");
}
else if(num==2)
{
printf("\t\t___________________________\n");
printf("Name >> ");
printf("%s", n);
printf("\t\t___________________________\n");
printf("Age >> ");
printf("%d", age);
printf("\t\t___________________________\n");
printf("Number >> ");
printf("%d", p);
printf("\t\t___________________________\n");
printf("EMail >>");
printf("%s", add);
printf("__+++___+++___+++___+++___+++");

printf("\t\t___________________________\n");
printf("Name >> ");
printf("%s", na);
printf("\t\t___________________________\n");
printf("Age >> ");
printf("%d", ag);
printf("\t\t___________________________\n");
printf("Number >> ");
printf("%d", ph);
printf("\t\t___________________________\n");
printf("EMail >>");
printf("%s", addr);
printf("__+++___+++___+++___+++___+++");
}
}
else if(z==3)
{
printf("Are you done?? Press 1 for YES or 2 for NO \n");

int ans;
printf("Enter\n");
scanf("%d", &ans);
if(ans==1)
{
printf("Bye\n");
}
else if(ans==2)
{
printf("ayt; Continue then");
}
}
}
else
{
printf("In-Valid");
}
return 0;
}