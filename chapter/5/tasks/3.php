<?php
// Задание 3
// Требуется промоделировать многоквартирный дом. Какие классы и объекты вы использовали бы для этого? 

/*
 * Класс Собственник
 */
class Owner {
    
    public $o_name; //Имя
    public $o_surname; //Фамилия
    public $o_phone; //Телефон
    public $o_num; //№ Квартиры

}

/*
 * Класс Квартира
 */
class Apartment {
    
    public $rooms; //Количество комнат
    public $total_area; //Общая площадь
}

/*
 * Класс Дом
 */
class Home {
    
    public $location; //Месторасположение дома
    public $floor; //Этажей в доме
    public $type; //Тип дома
    
}