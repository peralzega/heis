CREATE TABLE transaksi (
  OrderID int(3) NOT NULL AUTO_INCREMENT,
  OrderDate date NOT NULL,
  OrderTime time NOT NULL,
  PlayDay int(2) NOT NULL,
  PlayMonth varchar(15) NOT NULL,
  PlayYear int(4) NOT NULL,
  PlayStart int(2) NOT NULL,
  PlayEnd int(2) NOT NULL,
  Field varchar(15) NOT NULL,
  User_ID varchar(25) NOT NULL,
  Charge int(6) NOT NULL,
  Stats int(1) NOT NULL,
  PRIMARY KEY (OrderID),
  UNIQUE KEY OrderID (OrderID),
  KEY TransaksiFK (User_ID)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;