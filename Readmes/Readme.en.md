# Example implementation of the When-Then conditional structure

This is just an example of implementation and will obviously be different in your context.

## Context

Imagine you work for a fast-growing e-commerce company selling a wide range of products
a wide range of products online, including apparel, electronics, household products, and
and much more. The company wants to enhance its customers' online shopping experience by offering
special promotions and discounts on selected products.

## Challenge

The challenge facing the company is:

* how to effectively and scalably implement
  pricing rules to apply product-specific discounts or promotions to customers' shopping carts?
  customers' baskets?

* In addition, how do you ensure that these rules are flexible and easy to manage, enabling
  react quickly to changing market needs, while maintaining a clean and maintainable code base?
  maintainable code base?

In this scenario, we'll have different rules that apply to items in the shopping cart depending on certain
conditions. Below are the different rules:

1 - Apply a 20% discount on a promotional product with an order quantity equal to 1.

2 - Apply a 55% discount to a promotional product with an order quantity greater than 5.

3 - Apply an 80% discount on a "Pents" type product with an order quantity greater than 5.

4 - Apply a 40% discount on a "Shoes" product with an order quantity greater than 1


## Proposed solution

To solve this problem, we're going to explore the use of the `When-Then` pattern. We'll create a
flexible pricing system where each pricing rule will be represented by a separate class with `when()` and
methods `when()` and `then()`. These rules can be easily added, modified or deleted without altering the system's
system logic.

This approach will help the company to manage promotions and discounts efficiently, and to maintain clean, maintainable
code for its e-commerce system, maintainable code for its constantly evolving e-commerce system.

## Requirements

To test this program, you need to have at least PHP 8.2 and composer installed.

## Instructions

To run this program, execute the following commands:

```
> git clone https://github.com/ulrich-geraud/when-then-conditionnal-structure-php.git
> cd when-then-conditionnal-structure-php
> compose install
> cd src/Application
> php Application.php
```

If you have any questions, don't hesitate to contact me on [linkedin](https://www.linkedin.com/in/ulrich-geraud-ahogla/)
or book a slot on my [website](https://cleancoders.fr)