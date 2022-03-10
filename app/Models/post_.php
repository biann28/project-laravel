<?php

namespace App\Models;


class Post
{
   private static $blog_posts = [
    "title" => "Lorem 300",
    "slug" => "lorem-300",
    "author" => "Biansyah Rahiidin",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, neque necessitatibus eaque temporibus facilis ad excepturi officia distinctio, nihil id dolores deserunt placeat dignissimos perferendis atque maxime veniam tempora, voluptatibus illum. Excepturi voluptatum, facere nihil omnis, eos sint amet assumenda voluptates quod aut nemo dicta deleniti dolorum perspiciatis, distinctio dignissimos quas quis deserunt! Porro ipsa dicta asperiores vero in assumenda voluptatibus? Qui culpa eligendi laboriosam molestiae nihil, corrupti, necessitatibus iure fuga, doloribus placeat repudiandae odio perspiciatis repellat voluptatem molestias sequi possimus. Libero perspiciatis eveniet ipsum, neque sequi quam dolores sapiente, molestias nulla quis corrupti? Inventore unde possimus quas nulla consequatur reiciendis molestias pariatur dicta nam repellat fugit perspiciatis commodi quidem ipsam iusto non explicabo laudantium, fuga sunt ea, blanditiis magnam quis. Eos harum ex laudantium officia fugit id unde quibusdam cupiditate maxime, nesciunt nihil officiis, accusantium recusandae, culpa corrupti velit eum. Provident facilis nostrum eligendi quasi saepe tempore ratione maxime illum dolorum quisquam hic ex debitis iure unde ipsam veniam consequatur, odio aspernatur sint expedita quae id blanditiis nobis dolores. At fuga ratione non, itaque iure mollitia laborum ipsam quos assumenda esse ab ullam similique quibusdam inventore beatae nihil delectus sapiente dignissimos eius dicta, aliquid id quo? Ipsam delectus recusandae odit libero dolores ipsa voluptate id beatae vitae error eum illo excepturi hic dolore, ducimus neque quis quos est distinctio natus laboriosam commodi vero! Quasi consectetur aliquid saepe totam! Nemo vero incidunt eaque porro modi illum facilis aperiam et dicta. In error ipsa officia, eaque similique ipsam fugit ad, optio, dolorem excepturi voluptatibus eos laborum provident rem ex assumenda ea. Quo soluta saepe itaque laudantium eaque vitae! Incidunt aliquam autem debitis labore, voluptas dolorem necessitatibus corporis error repellat nobis provident alias soluta placeat dicta ipsum quae asperiores id. Consequuntur possimus est eum, veritatis magni libero. Explicabo saepe magni ut nostrum!"
   ];     

   public static function all()
   {
       return collect(self::$blog_posts);
   }

   public static function find($slug)
   {
       $posts =static::all();
       return $posts->firstwhere('slug', $slug);
   }

};