/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package voting;


class User2 {
    
    
     private String name,partyname,gender,post,state,idprooftype,idproofno,address;
     int age;
    
    public User2 (String name,String partyname,String gender,int age,String post,String state)
            {
            this.name=name;
            this.partyname=partyname;
            this.gender=gender;
            this.age=age;
            this.post=post;
             this.state=state;
            this.idprooftype=idprooftype;
            this.idproofno=idproofno;
            this.address=address;
            }
    public String getname()
    {
    return name;}
    public String getpartyname()
    {
    return partyname;
    }
    public String getgender()
    {
    return gender;}
    public String getpost()
    {
    return post;
    }
    public String getstate()
    {
    return state;
    }
    public String getidprooftype()
    {
    return idprooftype;
    }
 public String getidproofno()
    {
    return idproofno;
    }
 public String getaddress()
    {
    return address;
    }    
public int getage()
    {
    return age;
    }
}
