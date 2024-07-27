<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('About', route('about'));
});
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Contact', route('contact'));
});
Breadcrumbs::for('article', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Article', route('article.list'));
});
Breadcrumbs::for('article.detail', function (BreadcrumbTrail $trail, $posts) {
    $trail->parent('article');
    $trail->push($posts->title, route('article.detail', $posts->id));
});
Breadcrumbs::for('product.list', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Products', route('product.list'));
});
Breadcrumbs::for('product.detail', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('product.list');
    $trail->push($product->title, route('product.detail', $product));
});
Breadcrumbs::for('category.detail', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('home');
    $trail->push($category->title, route('category', $category));
});
Breadcrumbs::for('sign-in', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('sign-in', route('sign-in'));
});
Breadcrumbs::for('sign-up', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('sign-up', route('sign-up'));
});
Breadcrumbs::for('admin', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('admin', route('admin'));
});
Breadcrumbs::for('add.product', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push('add-product', route('add.product'));
});
Breadcrumbs::for('edit.product', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('admin');
    $trail->push("edit-product-$product->title", route('edit.product', $product));
});