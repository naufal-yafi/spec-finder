<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $data_product = [
        [
            "id" => 1,
            "title" => "Fantech X9 Thor",
            "slug" => "fantech-x9-thor",
            "price" => 99000,
            "description" => "Fantech X9 Thor adalah mouse gaming dengan sensor optik 4800 DPI dan tombol-tombol yang dapat diprogram sesuai kebutuhan. Dilengkapi dengan desain ergonomis yang nyaman digunakan dalam waktu yang lama dan bahan berkualitas tinggi dengan lapisan karet anti-slip. Memaksimalkan performa dan presisi untuk kemenangan dalam setiap pertandingan game.",
            "spesification" => "Sensor Optik Gaming, DPI yang bisa diatur dalam game (1200-2400-3200-4800), Kecepatan/ekselerasi: 60ips/15g, Polling rate: 125hz, FPS: max 6000fps, Klik tahan lebih dari 10.000.000 kali, Kabel nylon 1.8m, Roda Silikon, RGB Chroma Luminous light, Ukuran: 128mm x 68mm x 41mm, Berat Mouse : 115 Gr",
            "likes" => 1120500,
            "tags" => "gaming, mouse gaming, murah, high dpi",
            "created_at" => "2023-05-02 14:10:22",
            "updated_at" => "0000-00-00 00:00:00"
        ],
        [
            "id" => 2,
            "title" => "Fantech X16 Thor",
            "slug" => "fantech-x16-thor",
            "price" => 99000,
            "description" => "Fantech X9 Thor adalah mouse gaming dengan sensor optik 4800 DPI dan tombol-tombol yang dapat diprogram sesuai kebutuhan. Dilengkapi dengan desain ergonomis yang nyaman digunakan dalam waktu yang lama dan bahan berkualitas tinggi dengan lapisan karet anti-slip. Memaksimalkan performa dan presisi untuk kemenangan dalam setiap pertandingan game.",
            "spesification" => "Sensor Optik Gaming, DPI yang bisa diatur dalam game (1200-2400-3200-4800), Kecepatan/ekselerasi: 60ips/15g, Polling rate: 125hz, FPS: max 6000fps, Klik tahan lebih dari 10.000.000 kali, Kabel nylon 1.8m, Roda Silikon, RGB Chroma Luminous light, Ukuran: 128mm x 68mm x 41mm, Berat Mouse : 115 Gr",
            "likes" => 1120500,
            "tags" => "gaming, mouse gaming, murah, high dpi",
            "created_at" => "2023-05-02 14:10:22",
            "updated_at" => "0000-00-00 00:00:00"
        ]
    ];

    public static function getAll()
    {
        return collect(self::$data_product);
    }

    public static function getByID($slug)
    {
        $products = static::getAll();
        return $products->firstWhere('slug', $slug);
    }
}
