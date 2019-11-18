#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// Stack structure using an array
typedef struct Stack {
	int* arr;
	int top;
} Stack;

// Initialise a Stack of given size
Stack* stack_initialize(int);

// Push an element onto the Stack
void stack_push(Stack*, int);

// Pop an element from the Stack. Do not return the element
void stack_pop(Stack*);

// Check if the Stack is empty
int stack_is_empty(Stack*);

// Return the top element of the Stack
int stack_peek(Stack*);

// Free the resources held by the Stack
void stack_destroy(Stack*);

// Convert an infix expression to postfix expression
void convert_infix_to_postfix(const char*, char*);

int main() {
	char source_infix[2000]="[l+(w*r-i)]";
	char target_postfix[2000];
	int number_of_inputs = 1;
	/*scanf("%d", &number_of_inputs);*/
	for(int counter = 0; counter < number_of_inputs; ++ counter) {
		/*scanf("%s", source_infix);*/
		convert_infix_to_postfix(source_infix, target_postfix);
		printf("%s\n", target_postfix);
	}
	return 0;
}

Stack* stack_initialize(int size)
{
    Stack *stack=(Stack *)malloc(sizeof(Stack));
    stack->arr=(int *)malloc(size*sizeof(int));
    stack->top=-1;
    return stack;
}

void stack_push(Stack *ptr_stack, int key) 
{
    ptr_stack->top++;
    *(ptr_stack->arr+ptr_stack->top)=key;
    
}

void stack_pop(Stack *ptr_stack)
{
    if(ptr_stack->top!=-1)
      return;
    else
    {
        ptr_stack->top--;
    }
}

int stack_is_empty(Stack *ptr_stack)
{
    if(ptr_stack->top==-1)
      return 1;
    else
      return 0;
}

int stack_peek(Stack *ptr_stack) 
{
    if(ptr_stack->top!=-1)
      return *(ptr_stack->arr+ptr_stack->top);
    else
      return -1;
}

void stack_destroy(Stack *ptr_stack) 
{
    ptr_stack->top=-1;
    free(ptr_stack->arr);
}


int infix_prec(char ch)
{
    if(ch=='+' || ch=='-')
      return 1;
    if(ch=='*' || ch=='/')
      return 3;
    if(ch=='('|| ch=='{' || ch=='[')
      return 5;
    if(ch==')' || ch=='}' || ch==']')
      return 0;
    return 4;
}

int stack_prec(char ch)
{
    if(ch=='+' || ch=='-')
      return 2;
    if(ch=='*' || ch=='/')
      return 4;
    if(ch=='{'|| ch=='(' || ch=='[')
      return 0;
    if(ch=='#')
      return -1;
    return 8;
}

void convert_infix_to_postfix(const char *source_infix, char *target_postfix)
{
    int i=0;
    Stack* stack=stack_initialize(2000);
    char ch;
    int j=0;
    stack_push(stack,'#');
    for(i;source_infix[i]!='\0';i++)
    {
        ch=source_infix[i];
        while(infix_prec(ch)<stack_prec(stack_peek(stack)))
        {
            target_postfix[j++]=stack_peek(stack);
            stack_pop(stack);
        }
        if(infix_prec(ch)!=stack_prec(stack_peek(stack)))
        {
            stack_push(stack,ch);
        }
        else
          stack_pop(stack);
          
    }
    while(stack_peek(stack)!='#')
    {
        target_postfix[j++]=stack_peek(stack);
        stack_pop(stack);
    }
    target_postfix[j]='\0';

}