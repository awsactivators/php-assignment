-- Create the database if it does not exist
CREATE DATABASE IF NOT EXISTS news_article;

-- Use the newly created database
USE news_article;


-- Create the news table
CREATE TABLE news (
    news_id INT AUTO_INCREMENT PRIMARY KEY,
    link TEXT NOT NULL,
    headline TEXT NOT NULL,
    category TEXT NOT NULL,
    short_description TEXT NOT NULL,
    authors TEXT,
    number_of_reads INT,
    date DATE
);

-- Create the images table with a foreign key to news table
CREATE TABLE images (
    image_id INT AUTO_INCREMENT PRIMARY KEY,
    news_id INT,
    image_url TEXT NOT NULL,
    alt_text TEXT,
    FOREIGN KEY (news_id) REFERENCES news(news_id) ON DELETE CASCADE
);
