// Файл: create_index.js
db.my_table_copy.createIndex(
    { "NAME": 1 },
    {
        unique: true,
        partialFilterExpression: { "NAME": { $exists: true } }
    }
)