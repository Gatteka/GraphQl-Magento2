#Get test data query. 
#You may use GraphQL chrome extension like ChromieQL for this

{
pickUpStores {
total_count
items {
name
street
postcode
}
}
}


#Get Products data query

{
  products(
    filter: {
      created_at: {
        gt: "2017-11-01 00:00:00"
      }
    }
    pageSize: 25
    sort: {
      price: DESC
    }
  )
  {
    total_count
    items {
      name
      sku
      price {
        regularPrice {
          amount {
            value
            currency
          }
        }
      }
    }
    page_info {
      page_size
      current_page
    }
  }
}