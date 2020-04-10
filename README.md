# oop-crud-app

:::Basic OOP CRUD APP

Navigate to your MySQL Serve and create a database named OOPCRUDAPP
1  Copy the SQL command below and paste it in the SQL Tab on your PHPMyAdmin control Panel

CREATE TABLE `items` (
  `id` int(11) AUTO_INCREMENT, AUTO_INCREMENT=80,
  `product_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL)

After pasting this click GO
2  Copy the SQL command below and paste it in the SQL Tab on your PHPMyAdmin control Panel again
INSERT INTO `items` (`id`, `product_name`, `quantity`) VALUES
(79, 'Xbox 360 Gx', '3 '),
(78, 'Passat', '65'),
(77, 'Passat', 'u'),
(75, 'Passat', 'u'),
(76, 'Passat', '65'),
(74, 'Octa Dv', '65');
…this will insert the dummy data we need in the items table

Now the database and the required table has been created
You can now navigate and start using the app
