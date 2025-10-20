<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        $testimonials = [
            [ 'user_name' => 'Budi Santoso', 'rating' => 5, 'content' => 'Toko Sumber Teknik menyediakan berbagai macam alat teknik berkualitas dengan harga bersaing. Pelayanannya ramah dan professional.' ],
            [ 'user_name' => 'Ahmad Hidayat', 'rating' => 5, 'content' => 'Sangat puas dengan produk yang dibeli di sini. Barangnya original dan garansi terjamin.' ],
            [ 'user_name' => 'Dewi Pratiwi', 'rating' => 4, 'content' => 'Tempat terlengkap untuk mencari peralatan teknik. Staff sangat membantu dalam memilih produk yang sesuai kebutuhan.' ],
            [ 'user_name' => 'Rina Sari', 'rating' => 5, 'content' => 'Pengiriman cepat dan produk sesuai deskripsi. Sangat direkomendasikan!' ],
            [ 'user_name' => 'Fajar Nugroho', 'rating' => 3, 'content' => 'Produk cukup baik, namun pengemasan perlu ditingkatkan.' ],
            [ 'user_name' => 'Siti Aminah', 'rating' => 4, 'content' => 'Pelayanan CS sangat membantu, proses order mudah.' ],
            [ 'user_name' => 'Doni Saputra', 'rating' => 5, 'content' => 'Barang berkualitas, harga bersaing, toko terpercaya.' ],
            [ 'user_name' => 'Lina Marlina', 'rating' => 4, 'content' => 'Sudah beberapa kali belanja di sini, selalu memuaskan.' ],
            [ 'user_name' => 'Hendra Wijaya', 'rating' => 5, 'content' => 'Toko teknik terbaik di kota ini, pilihan produk lengkap.' ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}