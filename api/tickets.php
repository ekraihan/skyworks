<?php
/**
 * getNames.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/3/17
 */
chdir('../');
include_once "mappers/TicketMapper.php";

$blah = TicketMapper::get_all();

$flub = new Ticket();
$flub->set_rating(3);

print_r($flub->toJson());

