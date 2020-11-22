-- DROP TABLE `tp_goods`;
-- CREATE TABLE IF NOT EXISTS `tp_goods`(
--    `goods_id` INT UNSIGNED AUTO_INCREMENT,
--    `goods_name` VARCHAR(100) NOT NULL,
--    `date` INT(10) NOT NULL,
--    PRIMARY KEY ( `goods_id` )
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- INSERT INTO `tp_goods` ( `goods_name`, `date` )
--                        VALUES
--                        ( "1号商品", "1605850192" );
-- INSERT INTO `tp_goods` ( `goods_name`, `date` )
--                        VALUES
--                        ( "2号商品", "1605850193" );
-- INSERT INTO `tp_goods` ( `goods_name`, `date` )
--                        VALUES
--                        ( "3号商品", "1605850194" );
-- INSERT INTO `tp_goods` ( `goods_name`, `date` )
--                        VALUES
--                        ( "4号商品", "1605850195" );
--
-- DROP TABLE `tp_user`;
-- CREATE TABLE IF NOT EXISTS `tp_user`(
--    `user_id` INT UNSIGNED AUTO_INCREMENT,
--    `username` VARCHAR(20) NOT NULL,
--    `password` VARCHAR(36) NOT NULL,
--    `date` INT(10) NOT NULL,
--    PRIMARY KEY ( `user_id` )
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- INSERT INTO `tp_user` ( `username`, `password` , `date` )
--                        VALUES
--                        ( "张三", "e10adc3949ba59abbe56e057f20f883e" ,"1605850195");
-- INSERT INTO `tp_user` ( `username`, `password` , `date` )
--                        VALUES
--                        ( "李四", "e10adc3949ba59abbe56e057f20f883e" ,"1605850196");
-- INSERT INTO `tp_user` ( `username`, `password` , `date` )
--                        VALUES
--                        ( "王五", "e10adc3949ba59abbe56e057f20f883e" ,"1605850197");
--
--
-- DROP TABLE `tp_order`;
-- CREATE TABLE IF NOT EXISTS `tp_order`(
--    `order_id` INT UNSIGNED AUTO_INCREMENT,
--    `goods_id` INT NOT NULL,
--    `user_id`  INT NOT NULL,
--    `date` INT(10) NOT NULL,
--    PRIMARY KEY ( `order_id` )
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tp_goods` ( `goods_name`, `date` )
                       VALUES
                       ( "5号商品", "1605850196" );
INSERT INTO `tp_goods` ( `goods_name`, `date` )
                       VALUES
                       ( "6号商品", "1605850197" );
INSERT INTO `tp_goods` ( `goods_name`, `date` )
                       VALUES
                       ( "7号商品", "1605850198" );
INSERT INTO `tp_goods` ( `goods_name`, `date` )
                       VALUES
                       ( "8号商品", "1605850199" );
INSERT INTO `tp_goods` ( `goods_name`, `date` )
                       VALUES
                       ( "9号商品", "1605850200" );
INSERT INTO `tp_goods` ( `goods_name`, `date` )
                       VALUES
                       ( "10号商品", "1605850201" );
INSERT INTO `tp_goods` ( `goods_name`, `date` )
                       VALUES
                       ( "11号商品", "1605850202" );
INSERT INTO `tp_goods` ( `goods_name`, `date` )
                       VALUES
                       ( "12号商品", "1605850203" );