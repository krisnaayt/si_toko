create table ms_product(
    product_id varchar(64),
    name varchar(255),
    price integer,
    image varchar(255),
    description varchar(255),

    constraint pk_ms_product_product_id primary key (product_id)
)