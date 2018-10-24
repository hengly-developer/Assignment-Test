SELECT        dbo.products.name, dbo.uoms.name, dbo.product_uoms.unit_cost, dbo.product_uoms.sell_price, dbo.product_uoms.discount
FROM            dbo.product_uoms INNER JOIN
                         dbo.products ON dbo.product_uoms.product_id = dbo.products.id INNER JOIN
                         dbo.uoms ON dbo.product_uoms.category_id = dbo.uoms.id