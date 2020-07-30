# Flyweight design pattern example

This is a working example of an implementation of the flyweight design pattern.

## What is the flyweight design pattern?

Flyweight is a structural design pattern that lets you fit more objects into the available amount of RAM by sharing common parts of state between multiple objects instead of keeping all of the data in each object.

The flyweight pattern divides an object's state into 2 parts known as the **intrinsic** and **extrinsic** state. 

An objects *intrinsic* state is constant for example, in video games where you are battling against hundreds of instanses of a computer generated enemy, lets call it EnemyA, this object's intrinsic state will include data that remains constant for every instance of EnemyA, such as:
```
EnemyA {
  attack_damage = 40 
  movement_speed = 85
  max_health = 400
  }
```

*Extrinsic* state contains data that is specific to each instance of that object, the data can (and is likely) to change. For example EnemyA's extrinsic data might include data such as:

```
current_health = 281
```

Further reading on the flyweight pattern can be read [here](https://refactoring.guru/design-patterns/flyweight)

## Running the program

Once cloned, enter the following command into a terminal to run the program

```
php runMe.php
```
