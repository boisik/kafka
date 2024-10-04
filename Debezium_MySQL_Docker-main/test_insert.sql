select user, host, plugin from mysq.user;
DROP USER 'root'@'%';

CREATE USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'ahosan';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;


CREATE USER 'ahosan'@'%' IDENTIFIED WITH mysql_native_password BY 'ahosan';
GRANT ALL PRIVILEGES ON *.* TO 'ahosan'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;


--it is executed from SQL-Yog
CREATE TABLE ahosan.my_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(50),
    age INT
);

INSERT INTO ahosan.my_table (NAME, age) VALUES ('John', 30), ('Alice', 25), ('Bob', 35), ('Emily', 28);

SELECT * FROM ahosan.my_table;

volumes:
- ./kafka-connect-mongodb:/kafka/plugins/kafka-connect-mongodb
- ./dcmsql:/kafka/plugins/debezium-connector-mysql



{
"name": "mongo",
"config": {
"connector.class": "com.mongodb.kafka.connect.MongoSinkConnector",
"tasks.max": "1",
"topics": "ahosan.ahosan.my_table_copy",
"connection.uri": "mongodb://admin:my_password@192.168.0.102:27017",
"database": "my_table_copy",
"collection": "my_table_copy",
"key.converter": "org.apache.kafka.connect.storage.StringConverter",
"value.converter": "org.apache.kafka.connect.json.JsonConverter",
"value.converter.schemas.enable": "true",
"transforms":"unwrap,rename",
"transforms.unwrap.type":"org.apache.kafka.connect.transforms.ExtractField$Value",
"transforms.unwrap.field":"after",
"transforms.rename.type":"org.apache.kafka.connect.transforms.ReplaceField$Value",
"transforms.rename.renames":"id:_id",
"delete.enabled":"true",
"delete.handling.mode":"ignore",
"delete.operation.type":"nothing",
"log4j.logger.org.apache.kafka.connect.runtime.WorkerSinkTask":"DEBUG",
"log4j.logger.com.mongodb.kafka.connect.sink":"DEBUG"
}
}
"key.converter": "org.apache.kafka.connect.json.JsonConverter",
"value.converter": "org.apache.kafka.connect.json.JsonConverter",
"key.converter.schemas.enable": "false",
"value.converter.schemas.enable": "false",
"errors.tolerance": "all",
"errors.log.enable": "true",
"errors.log.include.messages": "true",
"errors.deadletterqueue.topic.name": "crm_data_deadletterqueue",
"errors.deadletterqueue.topic.replication.factor": "1",
"errors.deadletterqueue.context.headers.enable": "true"

"delete.operation.type": "nothing"


"transforms": "rename",
"transforms.rename.type": "org.apache.kafka.connect.transforms.RenameField$Value",
"transforms.rename.field.renamer.mapping": "id:_id,NAME:name"