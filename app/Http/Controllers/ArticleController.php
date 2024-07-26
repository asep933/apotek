<?php

namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{
    public function index()
    {
      $BASE_API=env('BLOGGER_BASE_API');
      $KEY=env('BLOGER_KEY');

      $res = Http::get("$BASE_API/blogs/6672745013525518155/posts?key=$KEY")->object();
      $posts = $res->items;
      $dom = new DOMDocument;
      $lists = [];

      foreach($posts as $content) {
          @$dom->loadHTML($content->content);
          $image = $dom->getElementsByTagName('img');
          
          $list = [
            'id' => $content->id,
            'title' => $content->title,
            'content' => $content->content,
            'published' => $content->published,
            'author' => $content->author,
          ];
  
          foreach($image as $img) {
            $list['image_url'] = $img->getAttribute('src');
          } 
  
          $lists[] = $list;
        }

      return view('article', compact('lists'));
    }
    public function show(string $id)
    {
      $BASE_API=env('BLOGGER_BASE_API');
      $KEY=env('BLOGER_KEY');
      
      $posts = Http::get("$BASE_API/blogs/6672745013525518155/posts/$id?key=$KEY")->object();
      $comments = Http::get("$BASE_API/blogs/6672745013525518155/posts/$id/comments?key=$KEY")->object();
      $postsList = Http::get("$BASE_API/blogs/6672745013525518155/posts?orderBy=published&maxResults=4&key=$KEY")->object();
      $postsListOrderBy = $postsList->items;
      
      $dom = new DOMDocument;
      $lists = [];

      foreach($postsListOrderBy as $content) {
        @$dom->loadHTML($content->content);
        $image = $dom->getElementsByTagName('img');
        
        $list = [
          'id' => $content->id,
          'title' => $content->title,
          'content' => $content->content,
          'published' => $content->published,
          'author' => $content->author,
        ];

        foreach($image as $img) {
          $list['image_url'] = $img->getAttribute('src');
        } 

        $lists[] = $list;
      }

      return view('article-detail', compact('posts', 'lists', 'comments'));
    }

    public function deleteComment(string $commentId, string $postId): RedirectResponse
    {
      $BASE_API=env('BLOGGER_BASE_API');
      $KEY=env('BLOGER_KEY');

      Http::delete("$BASE_API/blogs/6672745013525518155/posts/$postId/comments/$commentId?key=$KEY");

      return back()->with('message', 'successfully delete comment');
    }
}

