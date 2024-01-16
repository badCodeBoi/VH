#include<stdio.h>

int rules();
int round1();

int main()
{
rules();

printf("\n\n");

round1();

return 0;
}

int round1()
{
char name[50];
printf("Wie is Playing?? > ");
scanf("%s",&name);
printf("\n\n");

int deposit;
printf("How much are you willing to flex today??");
scanf("%d",&deposit);
printf("\n\n");

printf("Your current standings are > R", name);;
printf("\n\n");

int bet1;
printf("%s , enter the hand you willing to place down > R", name);
scanf("%d", &bet1);
printf("\n\n");

if(bet1>deposit)
{
printf("Chill buddy, you aint popping like that");
printf("Dont Dream Again! Try Again > R");
scanf("%d", &bet1);
}
printf("\n\n");

int pc1;
pc1 = rand() % 10;

int guess1;
printf("%d", &guess1);
printf("\n\n");

if(guess1>10)
{
printf("Number Exceeds, \n");
printf("Enter Again >");
scanf("%d", &guess1);
}
printf("\n\n");

if(guess1==pc1)
{
printf("Congrats (DAMN!!) you won R%d", bet1);
printf("\n\n");

int bet2;
bet2 = bet1 * 10;

int new_won;
if(bet1 == deposit)
{
new_won = bet2 + 0;
}
else
{
new_won = bet2 + deposit;
}
printf("You won R%d in total", new_won);
}
else if(guess1!=pc1)
{
    printf("LOL WE/I/ME NVM, I WON! you LOST R%d", bet1);
    printf("\n\n");
    printf("THE NUMBER was > %d", pc1);
    printf("\n\n");

    int new_los;
    new_los = deposit - bet1;

    printf("Now you've got R%d", new_los);
    printf("\n\n");

    if(new_los==0)
    {
        printf("Mhan, you the definition of brokeness\n");
        printf("Nice day, We have money to make");
    }
    else
    {
    int decision;
    printf("press 1 for yes\n");
    printf("press 2 for no\n");

    printf("Do you wanna keep playing (Y/N) > ");
    scanf("%d", &decision);
    printf("\n\n");

    if(decision==1)
    {
    rules();
    printf("\n\n");
    printf("Now you have R%d as a balance", new_los);
    printf("\n\n");

    int bet3;
    printf("%s, Enter the money to bet > R", name);
    scanf("%d", &bet3);
    printf("\n\n");

    if(bet3>new_los)
    {
    printf("NAH,\n");
    printf("Try again: R");
    scanf("%d", &bet3);
    }

    int guess2;
    printf("");
    printf("");

    int pc2;
    pc2 =9;
    }
    }

}
}