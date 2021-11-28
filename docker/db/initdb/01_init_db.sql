USE db_test;

SET CHARACTER_SET_CLIENT = utf8;
SET CHARACTER_SET_CONNECTION = utf8;

CREATE TABLE IF NOT EXISTS message_board(
  user_name VARCHAR(100),
  message VARCHAR(500),
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO message_board (user_name, message) VALUES
('山本一郎', 'ようこそ Apache + PHP + MySQL の動作検証環境ヘ');
