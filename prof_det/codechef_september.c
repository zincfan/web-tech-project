#include <stdio.h>
typedef struct node
{
    int data;
    struct node *link;
}Node;

typedef struct clli
{
   Node *head;
   int length;
}List;

Node* createnode(int data)
{
    Node *new_node=(Node *)malloc(sizeof(Node));
    new_node->data=data;
    new_node->link=NULL;
    return new_node;
}

int fibo(List* cll,int n)
{
    cll->head=createnode(0);
    cll->head->link=cll->head;
    cll->length=1;
    if(n==1)
    {
        return;
    }
    else if(n==2)
    {
        Node *new_node=createnode(1);
        cll->head->link=new_node;
        new_node->link=cll->head;
        cll->length=2;
        return;
    }
    else
    {
        Node *last;
        Node *node1=createnode(1);
        cll->head->link=node1;
        node1->link=cll->head;
        cll->length=2;
        int first=0,second=1,third;
        int i;
        Node *temp=node1;
        for(i=2;i<n;i++)
        {
            third=first+second;
            Node *new_node=createnode(third);
            temp->link=new_node;
            new_node->link=cll->head;
            cll->length++;
            second=first;
            first=third;
        }
        
    }
}


int solve(List *cll)
{
    Node *start=cll->head;
    start=start->link;
    Node *delt;
    while(start->link!=start)
    {

        delt=start->link;
        start->link=delt->link;
        free(delt);
        start=start->link;
    }
    cll->length=1;
    return start->data;
}
int main(void)
{
    List *cll=(List *)malloc(sizeof(List));
    cll->head=NULL;
    cll->length=0;
    int i;
    fibo(cll,25);
    Node *start=cll->head;
    printf("%d ",start->data);
    /*while(start->link!=start)
    {
        printf("%d ",start->data);
        start=start->link;
    }*/
	
	return 0;
}

