import React, {Component} from 'react';

export default class AccountStatement extends Component {
	constructor(props) {
		super(props);

		this.state = {
			account: undefined
		};

		this.getAllTransactions = this.getAllTransactions.bind(this);

		this.getAllTransactions(0);
	}

	getAllTransactions(counter) {
		$.ajax({
			url: '/api/account/getAllTransactions',
			type: 'POST',
			dataType: 'json',
			success: function (account) {
				this.setState({account: account});
			}.bind(this),
			error: function (xhr, status, error) {
				if(counter <= 3)
					this.getAllTransactions(counter + 1);
				else
					this.setState({account: status});
			}.bind(this)
		});
	}

	render () {
		const account = this.state.account;
		var view;
		if(account === undefined)
		{
			view = 	<div className="panel panel-default">
						<div className="panel-body text-center">
							<i className="fa fa-circle-o-notch fa-fw fa-spin"></i> Loading your Statement of Account
						</div>
					</div>;
		}
		else
		{
			const transactions = account.transactions;
			var rows;
			if(transactions.length > 0)
			{
				rows = transactions.map(function (transaction, index) {
					transaction.date_transaction = moment(transaction.date_transaction).format('DD MMM YYYY');
					transaction.amount = accounting.formatMoney(transaction.amount, 'Php ');
					transaction.running_balance = accounting.formatMoney(transaction.running_balance, 'Php ');
					return 	<tr key={index}>
								<td>{transaction.date_transaction}</td>
								<td>{transaction.transaction_type.description}</td>
								<td className="text-right">{!transaction.transaction_type.is_deduct ? transaction.amount : null}</td>
								<td className="text-right">{transaction.transaction_type.is_deduct ? transaction.amount:  null}</td>
								<td className="text-right">{transaction.running_balance}</td>
							</tr>;
				});
			}
			else
			{
				rows = 	<tr className="text-center"><td colSpan="5"><i className="fa fa-info-circle fa-fw"></i> No Transactions Posted.</td></tr>;
			}


			view = 	<div className="panel panel-default">
						<div className="panel-heading">
							{account.name} (<strong>Account ID:</strong> {account.id})
						</div>
						<div className="panel-body">
							<div className="row">
								<div className="col-md-12">
									<table className="table table-striped">
										<thead>
											<tr>
												<th>Date</th>
												<th>Transaction Details</th>
												<th className="text-right">Debit</th>
												<th className="text-right">Credit</th>
												<th className="text-right">Balance</th>
											</tr>
										</thead>
										<tbody>
											{rows}
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
		}

		return (
			<div className="row">
				<div className="col-md-12">
					{view}
				</div>
			</div>
		);
	}
}