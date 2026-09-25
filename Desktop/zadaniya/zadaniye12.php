<?php
// массивы продуктов
$products = [
	[
		"name" => "Ноутбук",
		"price" => 70000,
		"quantity" => 2],
	[
		"name" => "мышь",
		"price" => 1500,
		"quantity" => 3],
	[
		"name" => "клавиатура",
		"price" => 3000,
		"quantity" => 1],
	[
		"name" => "монитор",
		"price" => 25000,
		"quantity" => 2]
		
];

$totalSum = 0; // итог суммы по дефолту 0

echo "-----список товаров-----\n";

foreach ($products as $product) {
	$itemTotal = $product['price'] * $product ['quantity']; // считает все количество в наличие и цену
	$totalSum += $itemTotal;
	
	echo "\n{$product['name']} - {$product['price']} руб - {$product['quantity']} штук (всего: {$itemTotal} руб.)\n";}

echo "\n\n-----расчет стоимости-----\n";

$discountPercent = 0;
// проценты скидок
if ($totalSum >= 150000) {
	$discountPercent = 15;
} elseif ($totalSum >= 100000) {
	$discountPercent = 10;
} elseif ($totalSum >= 50000) {
	$discountPercent = 5;
}
// вычисление скидки в итоговую сумму
$discountAmount = $totalSum * ($discountPercent / 100);
$finalPrice = $totalSum - $discountAmount;

echo "\nстоимость товаров {$totalSum} руб\n";
if ($discountPercent > 0) {
	echo "скидка: {$discountPercent}%\n";
	echo "размер скидки: {$discountAmount} руб\n";
} else {
	echo "скидка: 0% \n";
}
echo "итого к оплате: {$finalPrice} руб";