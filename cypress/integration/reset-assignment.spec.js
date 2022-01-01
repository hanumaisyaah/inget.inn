describe('Reset Assignment', () => {
    beforeEach(() => {
        // Sign in        
        cy.visit('/')
        cy.get('#btn-sign-in').click()
        cy.get('input[name=username]').type('nargyanti')
        cy.get('input[name=password]').type('12345678')
        cy.get('#sign-in-form').submit()
        cy.visit('settings/reset-data')
    })

    afterEach(() => {
        // Sign out                
        cy.get('#dropdownMenuButton').click()
        cy.get('.dropdown-item').contains('Sign Out').click()            
    })

    it('Reset assignment when assignment list is exist', function () {
        // Create data
        cy.get('#nav-assignment').click()
        cy.get('#add-assignment').click()
        cy.get('input[name=due_date]').type('2021-10-29')
        cy.get('input[name=due_time]').type('12:00')
        cy.get('input[name=name]').type('UTS Business Intelligent')
        cy.get('input[name=course]').type('Business Intelligent')        
        cy.get('select[name=level]').select('Medium')
        cy.get('input[name=estimation]').type('4')
        cy.get('#create-assignment-form').submit()        

        cy.visit('settings/reset-data')
        cy.get('#btn-reset-assignment').click()
        cy.get('#btn-confirm-reset-assignment').click()        
        cy.get('p').should('contain', 'Assignment Successfully Reset')
    })

    it('Reset assignment when assignment list is empty', function () {
        cy.get('#btn-reset-assignment').click()
        cy.get('#btn-confirm-reset-assignment').click()        
        cy.get('p').should('contain', 'Assignment Successfully Reset')
    })   
})