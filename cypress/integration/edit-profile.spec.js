describe('Edit Assignment', () => {
    beforeEach(() => {
        // Sign in        
        cy.visit('/')
        cy.get('#btn-sign-in').click()
        cy.get('input[name=username]').type('nargyanti')
        cy.get('input[name=password]').type('12345678')
        cy.get('#sign-in-form').submit()
        cy.visit('settings/account')
        cy.get('#btn-edit-account').click()
        // cy.get('button').should('contain', 'Save') // Check if it's on the create assignment page
    })

    // afterEach(() => {
    //     // Sign out                
    //     cy.get('#dropdownMenuButton').click()
    //     cy.get('.dropdown-item').contains('Sign Out').click()            
    // })

    it('Fill all data with correct fields', function () {        
        cy.get('input[name=name]').clear().type('Nabilah Argyanti')
        cy.get('input[name=username]').clear().type('nargyanti')
        cy.get('input[name=email]').clear().type('nabilah@gmail.com')        
        cy.get('#account-edit-form').submit()
        cy.get('p').should('contain', 'User Successfully Updated')
    })    

    it('Fill the data with NULL value', function () {                
        cy.get('input[name=name]').clear()
        cy.get('input[name=username]').clear()
        cy.get('input[name=email]').clear()
        cy.get('#account-edit-form').submit()
        cy.get('#btn-edit-account').click()
        cy.get('strong').should('contain', 'Whoops!')        
    })
})