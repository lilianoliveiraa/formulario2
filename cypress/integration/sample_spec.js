describe('test form', function() {
  it('visit the form', function() {
    cy.visit('http://localhost:4444') // change URL to match your dev URL
  })
})
describe('test form required fields', function() {
  it('required fields', function() {
    cy.visit('http://localhost:4444')



    // Get an input, type into it and verify that the value has been updated
    cy.get('#email')
      .type('fake@email.com')
      .should('have.value', 'fake@email.com');

      cy.get('#email')
        .type('fake@email.com')
        .should('have.value', 'fake@email.com')

      cy.get('#email')
          .type('fake@email.com')
          .should('have.value', 'fake@email.com')

      cy.get('#email')
            .type('fake@email.com')
            .should('have.value', 'fake@email.com')
  })
})
