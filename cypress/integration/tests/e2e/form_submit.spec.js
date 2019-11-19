describe('test form', function() {
  it('visit the form', function() {
    cy.visit('http://localhost:4444') // change URL to match your dev URL
  })
})
describe('test form submit', function() {
  it('required fields', function() {
    cy.visit('http://localhost:4444')



    // Get an input, type into it and verify that the value has been updated
    cy.get('#name')
      .type('lilian antonia')
      .should('have.value', 'lilian antonia');

    cy.get('#cpf')
      .type('03597009697')
      .should('have.value', '03597009697')

    cy.get('#date')
      .type('10/06/1979')
      .should('have.value', '10/06/1979')

    cy.get('#mobile-number')
      .type('998636262')
      .should('have.value', '998636262')

    cy.get('#adress')
      .type('rua asa branca')
      .should('have.value', 'rua asa branca')

    cy.get('#email')
      .type('fake@email.com')
      .should('have.value', 'fake@email.com')



    cy.get('button').click()

  })
})
